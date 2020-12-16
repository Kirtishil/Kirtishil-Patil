//odd
function printOddNums(num)
{
    for (let i = 1; i <= num; i++)
    {
        if(i%2!==0)
        {
            console.log(i);
        }
    }
}     
console.log("List of odd nos form 1 to 100");
  printOddNums(100);