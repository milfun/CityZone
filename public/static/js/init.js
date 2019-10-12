/*
* @Author: MilFun
* @Date:   2019-10-12 15:18:20
* @Last Modified by:   milfun
* @Last Modified time: 2019-10-12 15:45:56
*/
var milfun = {
	path: 'http://localhost/cityzone/public/static/js/',
	init:function(list){
		console.log('I am here');
		for(var i=0;i<list.length;i++){
		// 使用juqery的同步ajax加载js.
		// 使用document.write 动态添加的js会在当前js的后面，可能会有js引用问题
		// 动态创建script脚本，是非阻塞下载，也会出现引用问题
		$.ajax({type:'GET',url:this.path+list[i]+'.js',async:false,dataType:'script'});
		}
	}
}
