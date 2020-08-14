var collectionsIntervals1 = [[1,3],[2,6],[8,10],[15,18]]
var collectionsIntervals2 = [[1,8],[2,6],[5,10],[15,18]]
var collectionsIntervals3 = [[1,8],[2,6],[5,10],[9,18]]




console.log(mergeIntervals(collectionsIntervals1))
console.log(mergeIntervals(collectionsIntervals2))
console.log(mergeIntervals(collectionsIntervals3))



function mergeIntervals(collectionsIntervals){


    let firstNumber = collectionsIntervals[0][0]
    let lastNumber = collectionsIntervals[0][1]
    let newIntervals = []


        for(var j=0; j< collectionsIntervals.length; j++){
   

            if(lastNumber> collectionsIntervals[j][0]){
                
                lastNumber = collectionsIntervals[j][1]
    
            }
            else{
                
                newIntervals.push([firstNumber, lastNumber])
                firstNumber = collectionsIntervals[j][0]
                lastNumber = collectionsIntervals[j][1]
               
              
            }

        }

        newIntervals.push([firstNumber, lastNumber])


    

    return newIntervals;



}


