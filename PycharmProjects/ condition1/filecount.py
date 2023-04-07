with open("third.txt","rt")as file:
    data=file.read()
    words=data.split(" ")
print("number of words in the file",len(words))
