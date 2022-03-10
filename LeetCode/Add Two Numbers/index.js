const sumTwoReversedArrays = (a = [], b = []) => {
	const reverseArray = (array) => {
		const reversedArray = [];
		for (let i = array.length - 1; i >= 0; i--) {
			reversedArray.push(array[i]);
		}
		return reversedArray;
	};

	const convertArrayToString = (array) => {
		const newArray = array.map((number) => number.toString());
		return newArray;
	};

	const convertArrayToNumber = (array) => {
		const newArray = array.map((number) => Number(number));
		return newArray;
	};

	const concatArray = (array) => {
		let newArray = [];
		for (number in array) {
			newArray = `${newArray}${array[number]}`;
		}
		return newArray;
  };

	let reversedA = reverseArray(a);
	let reversedB = reverseArray(b);
	reversedA = convertArrayToString(reversedA);
	reversedB = convertArrayToString(reversedB);
	reversedA = concatArray(reversedA);
	reversedB = concatArray(reversedB);
	reversedA = Number(reversedA);
	reversedB = Number(reversedB);
	let sum = reversedA + reversedB;
	sum = sum.toString();
	sum = reverseArray(sum);
	sum = convertArrayToNumber(sum);
	return sum;
};
