//cheerio是nodejs的抓取页面模块
var cheerio =require("cheerio");
// 客户端请求代理模块  request(get,post,put,delete,head请求时)
var request = require("superagent");
//filesystem  目录有关的操作
var fs = require("fs");

//用于保存数据
var save_data=[];

// process.argv  数组包括 node.exe 路径、当前文件路径、url参数
// params得到只有url的参数
var params = process.argv.splice(2);

var collect_url= params[0];

//判断是否有url数据
if (params.length==0) {
	console.log(" YOU  require argv error");
}else{
	require.post(collect_url)
		.end(function(err,data){

			var collect_data=cheerio.load();

			//遍历数组
			collect_data(".topic-category ul li.items").each(function  (index,element) {
					// element 当前对象
					 
					 // 漫画的图片
					var img_src=jQuery(element).find(".kk-img").attr("data-kksrc");						 

					// a标签
					var  a_tag=jQuery(element).find(".topic-tit a");
					 // 漫画的标题
					var title=a_tag.text();
					 // 漫画的标题
					var href="http://www.kuaikanmanhua.com"+a_tag.attr("href");

					save_data.push(
									{
										img_src,
										title,
										href
									}
								);

		})
	//关键代码
	fs.writeFile("cate.json",JSON.stringify(save_data));	
}