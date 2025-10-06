
plaintext = "OMITTED!"

# ka and kb form the secret key

ka = 0
kb = 0

# The entire encryption and output in one line...

print repr("".join([ chr((ka*ord(c)+kb)%256) for c in plaintext ]))

