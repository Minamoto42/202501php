try{
    let result = new 20 + 10;
    console.log("答案: " + result);
} catch (error) {
    console.error("「try...catch」发生错误: " + error.message); 
}

function divide(a, b) {
    if (b === 0) {
        throw new Error("除数不能为 零");
    }
    return a / b;
}
try {
    let result = divide(10, 0);
    console.log("答案: " + result);
}catch (error) {
    console.error("「throw」发生错误: " + error.message);
}

try {
    console.log("开始计算...");
    let result = new 12 + 3;
    console.log("结果: " + result);
} catch (error) {
    console.error("「try...catch...finally」发生错误: " + error.message);
} finally {
    console.log("「try...catch...finally」结束计算...");
}