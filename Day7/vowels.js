//vowels
var sentence= `The quick brown fox jumps over the lazy dog`
console.log('Sentence :',sentence);
function countVowel(str) { 
    const count = str.match(/[aeiou]/gi).length;
    return count;
}
const result = countVowel(sentence);
console.log("Total vowels =",result);


