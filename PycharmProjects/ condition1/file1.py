with open("third.txt", "r")as f1:
    x=f1.readlines()
    words=x[0].split(" ")
    print(len(words))

