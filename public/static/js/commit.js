/*
* @Author: MilFun
* @Date:   2019-10-12 15:16:24
* @Last Modified by:   milfun
* @Last Modified time: 2019-10-22 09:21:12
*/
class commit {

  constructor(list) {
  	this.url= 'http://milfun.com/mark/addblog';
  }

  getAll(){
  	var acontent,title,caterogy,tag;
  	title = $('#article-title').text();
  	caterogy = $('#article-type').text();
  	tag = $('#article-tag').text();
  	acontent = $('#result').html();
  	console.log(acontent)
  	var data = {acontent:acontent,aname:title,caterogy:caterogy,tag:tag};
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
let co =new commit();
