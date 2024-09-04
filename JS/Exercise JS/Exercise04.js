/* เขียนตามสไลด์อาจารย์ */
const random_hex_color_code = () =>{
    let n = (Math.random()*0xfffff *1000000).toString(16)
    return '#'+n.slice(0,6);
}
console.log(random_hex_color_code())

/* แบบเขียนจบในบรรทัดเดียว */
const random_hex_color_code_Name = ()=> '#'+((Math.random() *0xfffff *1000000).toString(16)).slice(0,6);

console.log(random_hex_color_code_Name())