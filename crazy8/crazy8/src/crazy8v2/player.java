/**
 * 
 */
package crazy8v2;


/**
 * @author Zeeshan
 *
 */
public class player {
	private String name = null; 
	deck hand = new deck(); 
	
	public player(String name) {
		// TODO Auto-generated constructor stub
		this.name = name;
	}
	
	String getName(){
		return this.name;
	}
	
	void sortHand(String method){
		if(method.equals("value")){
			boolean flag = true; 
			//this is the passes loop which goes through the entire array 
			for (int i = 0; i < this.hand.size()-1; i++) {
				//sets the flag to false every pass
				flag = false; 
				//this is to compare the elements of the array it goes down every pass because the largest number gets bubbled to the top therefore you don't need to check it again
				for (int j = 0; j < this.hand.size()-(1+i); j++) {
					if((this.hand.get(j)).getValue() > (this.hand.get(j+1)).getValue()){
						flag = true; //if a swap happens then flag is true because saps are needed 
						card temp = this.hand.get(j+1);
						this.hand.set( j+1, this.hand.get(j));
						this.hand.set(j, temp);
						/*swaps elements*/
					}
				}
				if(!flag){//if no swaps where done then you can end the loop 
					break; 
				}
			}
		}else{
			boolean flag = true; 
			//this is the passes loop which goes through the entire array 
			for (int i = 0; i < this.hand.size()-1; i++) {
				//sets the flag to false every pass
				flag = false; 
				//this is to compare the elements of the array it goes down every pass because the largest number gets bubbled to the top therefore you don't need to check it again
				for (int j = 0; j < this.hand.size()-(1+i); j++) {
					if((this.hand.get(j)).getSuit().compareToIgnoreCase((this.hand.get(j+1)).getSuit()) > 0){
						flag = true; //if a swap happens then flag is true because saps are needed 
						card temp = this.hand.get(j+1);
						this.hand.set( j+1, this.hand.get(j));
						this.hand.set(j, temp);
						/*swaps elements*/
					}
				}
				if(!flag){//if no swaps where done then you can end the loop 
					break; 
				}
			}
		}
	}
	
	boolean hasCard(String suit) {
		int id = -1;
		boolean exists = false;
		for (int i = 0; i < this.hand.size(); i++)
		{
			if(this.hand.get(i).getSuit().equals(suit))
			{
				id = i;
				exists = true;
			}
		}
		
		if (exists)
			return true;
		else
			return false;
	}
	
	private int hasCard(int val, String suit){
		int id = -1;
		boolean exists = false; 
		for (int i = 0; i < this.hand.size(); i++) {
			if(this.hand.get(i).getSuit().equals(suit) && this.hand.get(i).getValue() == val){
				id = i; 
				exists = true;
			}
		}
		if(exists){
			return id;
		}else{
			return id; 
		}
	}
	
	boolean hasCard(int value) {
		int id = -1;
		boolean exists = false;
		for (int i = 0; i < this.hand.size(); i++)
		{
			if(this.hand.get(i).getValue() == value)
			{
				id = i;
				exists = true;
			}
		}
		
		if (exists)
			return true;
		else
			return false;
	}
	
	card playCard(int val, String suit){
		int exists = hasCard(val, suit);
		if(exists != -1){
			card card = this.hand.get(exists);
			this.hand.remove(exists);
			return card; 
		}else{
			return null; 
		}
	}
	
	void showHand(){
		 for(int i = 0; i < this.hand.size(); i++){
			 System.out.print(this.hand.get(i).printCard("f") + "\n");
		 } 
	}
	
}
