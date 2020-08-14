

var nums1 = [4,5,6,1,2,5,2], target1 = 6 //testing two solutions
var nums2 = [1,2,3,2,3,0], target2 = 6 
var nums3 = [20,88,0,42,1], target3 = 0 //testing not using the same element twice
var nums4 = [2, 7, 11, 15], target4 = 9


console.log(getTwoSum(nums1, target1))
console.log(getTwoSum(nums2, target2))
console.log(getTwoSum(nums3, target3))
console.log(getTwoSum(nums4, target4))



function getTwoSum(arrayNums, target){

    let sum =0




    for(var i=0; i<arrayNums.length; i++){

        for(var j=0; j<arrayNums.length; j++){

            sum = arrayNums[i] + arrayNums[j];

            if( sum == target && i != j){

                return [i, j]
            }

        }

    }


    return "Não existe soma possível para o target em questão"


}