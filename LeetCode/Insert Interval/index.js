const insertWithin = (array = [], interval = []) => {
	const newArray = [];
	let i = 0;
	let start = interval[0];
	let end = interval[1];
	for (i; array[i] && array[i][1] < interval[0]; i++) {
		newArray.push(array[i]);
	}
	for (i; array[i] && array[i][0] <= interval[1]; i++) {
		start = Math.min(start, array[i][0]);
		end = Math.max(end, array[i][1]);
	}
	newArray.push([start, end]);
	for (i; array[i]; i++) {
		newArray.push(array[i]);
	}
	return newArray;
};
