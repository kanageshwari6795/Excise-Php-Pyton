with open("first.txt","r")as f1:
    with open("second.txt","r")as f2:
        f1_lines=f1.readlines()
        f2_lines=f2.readlines()
        same=set(f1).intersection(f2)
print("comman lines in the both files")
for line in same:
    if f1_lines !=f2_lines:
print(line,end=' ')