/*
* @Author: MilFun
* @Date:   2019-10-12 15:16:24
* @Last Modified by:   milfun
* @Last Modified time: 2019-10-23 15:51:40
*/
class commit {

  constructor(list) {
  	this.url= 'http://mp.milfun.fun/mark/addblog';
  }

  getAll(){
  	var acontent,title,caterogy,tag,img;
  	title = $('#article-title').text();
  	caterogy = $('#article-type').text();
  	tag = $('#article-tag').text();
  	acontent = $('#result').html();
    img =  $('#article-imgurl').text();
  	console.log(acontent)
  	var data = {acontent:acontent,aname:title,caterogy:caterogy,tag:tag,img:img};
  	this.commit(data);
  }
  commit(data){
  	$.ajax({
        type: "POST",
        url:this.url,
        dataType: "json",
        data:data,
        success: function(json){
          console.log(json)
          }
      });
  }
}
var co =new commit();
