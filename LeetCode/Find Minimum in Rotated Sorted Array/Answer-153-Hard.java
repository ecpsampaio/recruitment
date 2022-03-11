class InsertInterval {
	public int findMin(int[] number){
		if (number.length == 0) return -1;
		if (number.length == 1) return number[0];
		
		int left = 0;
		int right = number.length-1;
		
		while (left < right) {
			int midpoint = left + (right-left) / 2;
			if (midpoint > 0 && number[midpoint] < number[midpoint-1]) {
				return number[midpoint];
			} else if (number[left] <= number[midpoint] && number[midpoint] > number[right]) {
				left =midpoint + 1;
			} else {
				right = midpoint - 1;
			}
			
		}
		 return number[left];
	}
 
}
