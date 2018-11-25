/**
 * 
 */
package crazy8v2;
import java.util.*;

/**
 * @author 340760115
 *
 */
public class deck extends ArrayList<card>{
	deck deck = null;
	public deck() {
		// TODO Auto-generated constructor stub
		super(); 
	}
	
	public deck(deck deck){
		this.deck = deck; 
	}
	
	void shuffle(){
		Random rand = new Random(); 
		for (int i = this.size()-1; i > 0; i--) {
			int n = rand.nextInt(this.size()) + 0;
			card a = this.get(n); 
			this.set(n, this.get(i));
			this.set(i, a); 
		}
	}
	
	card deal(){
		card card = this.get(0);
		this.remove(0);
		return card; 
	}
	
	void addCard(card card, String loc){
		if(loc.equals("h")){
			this.addHand(card);
		}else{
			this.add(0, card);
		}	 
	}
	
	private void addHand(card card){
		this.add(card);
	}
	
	void fillDeck(){
		for (int i = 0; i < 4; i++) {
			for (int j = 1; j <= 13; j++) {
				if(i == 0){
					this.add(new card(j, "club"));
				}else if(i == 1){
					this.add(new card(j, "spade"));
				}else if(i == 2){
					this.add(new card(j, "diamond"));
				}else{
					this.add(new card(j, "heart"));
				}
			}
		}
	}
	
	void outDeck(){
		for (int i = 0; i < this.size(); i++) {
			System.out.println(this.get(i).getSuit() + ", " + this.get(i).getValue());
		}
	}
}
