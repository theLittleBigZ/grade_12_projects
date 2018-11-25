package crazy8v2;

public class card {
	private int value = 0; 
	private String suit = null; 
	private String face = null; 
	private String back = null;  
	
	public card(int value, String suit) {
		// TODO Auto-generated constructor stub
		this.value = value; 
		this.suit = suit; 
		if(suit.equalsIgnoreCase("club")){
			this.face = ".------.\n|"+ this.value +".--. |\n| :(): |\n| ()() |\n| '--'"+ this.value +"|\n`------'";
		}else if(suit.equalsIgnoreCase("spade")){
			this.face = ".------.\n" + "|"+this.value +".--. |\n" + "| :/" + "\": |" + "\n| (__) |\n| '--'"+this.value+"|\n`------'";
		}else if(suit.equalsIgnoreCase("diamond")){
			this.face = ".------."+"\n"+"|"+this.value+".--. |"+"\n"+"|"+" :"+"/\": |"+"\n"+"| "+":\"/:"+" |"+"\n"+"| '--'"+this.value+"|"+"\n"+"`------'";
		}else{
			this.face = ".------."+"\n"+"|"+this.value+".--. |"+"\n"+"| (\"/) |\n" +"| :\"/: |"+"\n"+"| '--'"+this.value+"|"+"\n"+"`------'";
		}
		this.back = ".------."+"\n"+"|Z.--. |"+"\n"+"| :(): |"+"\n"+"| ()() |"+"\n"+"| '--'Z|"+"\n"+"`------'";
	}
	
	int getValue(){
		return this.value; 
	}
	
	String getSuit(){
		return this.suit; 
	}
	
	String printCard(String side){
		if(side.equalsIgnoreCase("f")){
			return this.face;
		}else{
			return this.back;
		}
	}
}
