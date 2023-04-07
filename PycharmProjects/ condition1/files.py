with open ("first.txt")as first1:
    with open("second.txt")as second2:
        same=set(first1).intersection(second2)
print("common lines in the both the files")
for line in same:
    print(line,end='')
print("\n")

bass