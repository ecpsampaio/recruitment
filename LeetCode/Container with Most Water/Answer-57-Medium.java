public class WaterInContainer {	
	
	public int Area(int[] height) {
	      int length=height.length;
	      int end=length-1; 
	      int begin=0; 
	      int max=0; 
	      while(begin<end)
	      {
	        int result=(end-begin)* Math.min(height[begin], height[end]);
	        if(result>max)
	        {
	          max=result; 
	        }
	        if(height[begin]< height[end])
	        {
	          begin++; 
	        }else
	        {
	          end--; 
	        }
	      }
	      return max;
	    }

}
