/**
 * 
 */
package crazy8v2;
import java.util.*;
import java.io.*;
/**
 * @author Zeeshan
 *
 */
public class game {
	static Scanner scan = new Scanner(System.in);
	static player player1 = null;
	static player player2 = null;
	static deck main = new deck();
	static pile pile = new pile(main);
	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		try {
			title();
		} catch (Throwable e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		try {
			menu();
		} catch (Throwable e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} 
	}
	
	static void title() throws Throwable{
		BufferedReader in = new BufferedReader(new FileReader("title.txt"));
		String line;
		while((line = in.readLine()) != null)
		{
		    System.out.println(line);
		}
		in.close();
	}
	
	static void menu() throws Throwable{
		System.out.println("\n");
		Thread.sleep(350);
		System.out.println("This is a 2 player version of Crazy 8's.\n");
		Thread.sleep(350);
		System.out.println("You start off with 8 cards in your hand and the goal");
		Thread.sleep(350);
		System.out.println("is to get rid of all of the cards from your hand.");
		Thread.sleep(350);
		System.out.println("To begin, there will be one card taken from te top of the deck and put into the pile.");
		Thread.sleep(350);
		System.out.println("The first player will choose a card from their hand that matches the suit of the top card in the pile.");
		Thread.sleep(350);
		System.out.println("After matching the first card, you can place additional cards on top if they match the value of the first card places down.");
		Thread.sleep(350);
		System.out.println("If you cannot match any cards, you pick one up from the deck and play continues to the other player.");
		Thread.sleep(350);
		System.out.println("The game continues like this until one of the players is left with no cards.");
		System.out.print("\n\n\n\n");
		System.out.println("Enter 'start' to play");
		String in = scan.nextLine();
		
		if(in.equalsIgnoreCase("start")){
			init();
		}
	}
	
	static void init(){
		System.out.println("Enter Player 1 name");
		String name = scan.nextLine();
		if(name.equalsIgnoreCase(" ")|| name == null){
			System.out.println("name wasn't entered so name was set to default");
			player1 = new player("player1");
		}else{
			player1 = new player(name);
		}
		System.out.println("Enter Player 2 name");
		name = scan.nextLine();
		if(name.equalsIgnoreCase(" ")|| name == null){
			System.out.println("name wasn't entered so name was set to default");
			player2 = new player("player2");
		}else{
			player2 = new player(name);
		}
		main.fillDeck();
		main.shuffle();
		gp1(); 
	}
	
	static void gp1(){
		for(int i = 0; i < 8; i++){
			player1.hand.addCard(main.deal(), "h");
			System.out.println(player1.getName() + " has received a card");
			player2.hand.addCard(main.deal(), "h");
			System.out.println(player2.getName() + " has received a card");
		}
		
		pile.topCard(main);
		turn(player1, false);
	}
	
	private static player turnCheck(player player) {
		if (player.getName().equalsIgnoreCase(player1.getName()))
		{
			if (player.hand.size() == 0)
			{
				System.out.println(player.getName() + " WINS!!!");
				return null;
			}
			else
			{
				return player2;
			}
		}
		else if (player.getName().equalsIgnoreCase(player2.getName()))
		{
			if (player.hand.size() == 0)
			{
				System.out.println(player.getName() + " WINS!!!");
				return null;
			}
			else
			{
				return player1;
			}
		}
		return player;
	}
	
	static void turn(player player , boolean draw){
		pile.showTopCard(pile.getTop());
		System.out.println("Would you like to sort your hand by value or suit or no sort " + player.getName() + "?");
		String sort = scan.nextLine();
		if (sort.equalsIgnoreCase("value"))
		{
			player.sortHand("value");
		}
		else if (sort.equalsIgnoreCase("suit"))
		{
			player.sortHand("");
		}
		System.out.println("Would you like to see your hand " + player.getName() + "? (y or n)");
		if (scan.nextLine().equalsIgnoreCase("y"))
		{
			player.showHand();
		}
		
		if (player.hasCard(pile.getTop().getSuit()) == false)
		{
			if(!draw) {
				card addedCard = main.deal();
				System.out.println("You don't have a matching suit, you must draw a card.");
				player.hand.addCard(addedCard, "h");
				addedCard.printCard("f");
				System.out.println("You drew a " + addedCard.getValue() + " of " + addedCard.getSuit() + "\n\n");
			}
		}
		else 
		{
			if (player.hasCard(pile.getTop().getSuit()) == true || player.hasCard(pile.getTop().getValue()) == true) {
			System.out.println("Would you like to play a card (y or n)?");
			if (scan.nextLine().equalsIgnoreCase("y"))
			{
				System.out.println("What card would you like to play? (Give number)");
				int value = Integer.parseInt(scan.nextLine());
				System.out.println("\nGive suit in singular (ex. heart)");
				String suit = scan.nextLine();
				card cardP = player.playCard(value, suit); 
				if(cardP != null && cardP.getSuit().equalsIgnoreCase(pile.getTop().getSuit()) || cardP.getValue() == pile.getTop().getValue()) {
					pile.addCard(cardP, "");
					pile.changeTop();
				}else {
					System.out.println("You can't do that!!! Your turn is skipped");
					turn(turnCheck(player), false);
				}
			}
			}
		}
		
		System.out.println("Would you like to end your turn (y or n)?");
		String endTurn = scan.nextLine();
		if (endTurn.equalsIgnoreCase("n"))
		{
			turn(player, true);
		}
		else if (endTurn.equalsIgnoreCase("y"))
		{
			turn(turnCheck(player), false);
		}
		else 
		{
			System.out.println("You have skipped your turn!!");
			turn(turnCheck(player), false);
		}
	
	}
}
