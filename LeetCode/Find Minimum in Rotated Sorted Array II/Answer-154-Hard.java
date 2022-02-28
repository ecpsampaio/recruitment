
public class InsertInterval2 {
	public int findMin(int[] number) {
		
		int left = 0;
		int right = number.length-1;
		
		while(left < right) {
			int midpoint = left + (right - left)/2;
			if(number[midpoint] > number[right]) right=midpoint;
			else right--;
		}
		
		return number[left];
	}

}
