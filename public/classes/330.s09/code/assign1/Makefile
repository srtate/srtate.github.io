# Makefile for Assignment 1
# Author:  Steve Tate

# Very basic Makefile -- can be copied and emulated for all assignments in
# CSC 330

OBJS = wordreader.o
EXES = wordreader

CXXFLAGS = -g -Wall

wordreader: $(OBJS)
	$(CXX) $(CXXFLAGS) -o wordreader $(OBJS)

# Dependencies are defined below

wordreader.o: wordreader.cpp d_except.h d_stree.h d_stiter.h

# A simple "utility target" to clean up the current directory

clean:
	rm -f *.o *~ $(EXES)

