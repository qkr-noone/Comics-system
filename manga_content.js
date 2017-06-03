
var request = require("superagent");

var cheerio = require("cheerio");

var fs = require("fs"); 
	
var save_data = [];

var params= process.argv.splice(2);

var collect_url = params[0];

if (params.length==0) {

	console.log("please repeat input the url");

}else{
	/*重点 需要用 get 获取  不能用post*/
	request.get(collect_url)

		.end(function(err,data){

			var json=cheerio.load(data.text);

			var data_total=json(".article-list .table tbody tr").length-1;

			json(".article-list tbody tr").each(function(index,element){

				var img_src=json(element).find(".kk-sub-img").attr("src");

				var a_tag=json(element).find(".tit a");

				var title = a_tag.attr("title");

				var href="http://www.kuaikanmanhua.com"+a_tag.attr("href");

				save_data.push({

					img_src,
					href,
					title
					
				});


			})

		 console.log(save_data);
			/*fs.writeFile("manga_content.json",JSON.stringify(save_data));*/

			//获取漫画内容 content
			//在获取完漫画的每一个章节后 获取章节里面的内容content
			function getContent (num){
				request.get(save_data[num]['href'])
					.end(function(err,rtn_content){
						var json_two=cheerio.load(rtn_content.text);

						var content = json_two(".comic-imgs").html();
					
						save_data[num]['content']=content;

		
						if (num+1==save_data.length) {
		
							fs.writeFile("manga_content.json",JSON.stringify(save_data));
							 
		
						}else{
							num++;
							getContent(num);
						}
					})
			}

			getContent(0);

		})

}