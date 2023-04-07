with open("fourth.txt","r+")as fp:
    lines_seen=set()
    d=fp.readlines()
    fp.seek(0)
    for i in d:
        if i not in lines_seen:
            fp.write(i)
            lines_seen.add(i)
            fp.truncate()
print("original values")
