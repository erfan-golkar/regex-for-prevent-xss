### php regEx for prevent xss
A normal regex for prevent xss (just for one line inputs).

the regex : 

    /(<.*>.*<\s*\/.*>)|(&#?.*;)/i
