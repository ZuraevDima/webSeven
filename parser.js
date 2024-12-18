const axios = require("axios");
const getData = async() => {
try{
    const response = await axios.get("https://books.toscrape.com/"); 
    let res = response.data.match(/<p class=\"price_color\">(.*)<\/p>/g);    
    let res1 = response.data.match(/<a href=\"catalogue(.*)title(.*)<\/a>(.*)/g); 
    res = res.map(item => item.split('>')[1].slice(1, -3));
    res1 = res1.map(item => item.match(/title=\"(.*)\"/)[1]);
    //console.log(res, res1);
    const books = [];
    for(let i=0; i<res.length; i++){
        books.push([res[i], res1[i]]);
    } 
    return books;
}
catch(e)
{
    console.log(e);
}
}
module.exports.books = getData;