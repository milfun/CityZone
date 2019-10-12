/*
* @Author: MilFun
* @Date:   2019-10-12 15:16:11
* @Last Modified by:   milfun
* @Last Modified time: 2019-10-12 15:57:45
*/
var common = {
	init:function(list){
		console.log('I am in common');
		this.switchTab(0);
	},
	switchTab:function(arg=0){
		if (arg == 0) {
			$('.pswd-load').show();
			$('.mobi-load').hide();
			$('.code-load').hide();
		}else if(arg == 1){
			$('.pswd-load').hide();
			$('.mobi-load').show();
			$('.code-load').hide();
		}else if(arg == 2){
			$('.pswd-load').hide();
			$('.mobi-load').hide();
			$('.code-load').show();
		}else{

		}
	}
}