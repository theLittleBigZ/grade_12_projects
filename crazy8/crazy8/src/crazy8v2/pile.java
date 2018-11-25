/**
 * 
 */
package crazy8v2;

/**
 * @author Zeeshan
 *
 */
public class pile extends deck {
	private card top = null; 
	/**
	 * 
	 */
	public pile() {
		// TODO Auto-generated constructor stub
		super();
	}
	
	public pile(deck deck){
		
	}
	
	void topCard(deck deck){
		this.top = deck.deal(); 
	}
	
	void showTopCard(card card) {
		card = getTop();
		System.out.println(card.printCard("f"));
		System.out.println(card.getValue() + " of " + card.getSuit());
	}
	
	card getTop() {
		return this.top;
	}
	
	void changeTop() {
		this.top = this.get(0);
	}
	
}