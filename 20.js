function run(){
	const a = "test, tester, testertest, testing, testingtester"
	const t = a.split(',')

	t.reduce((pv,cv)=>{
		if(cv.trim().length > pv.trim().length) return cv.trim()
		console.log(pv.trim())
		return pv.trim()
	},'')
}
run()
