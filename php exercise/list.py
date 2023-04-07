def process_data(data):
    return reduce(lambda x, y: x * y, [i[0] - i[1] for i in data])