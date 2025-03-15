
all: base canvas sol

base:
	jekyll build --incremental

canvas:
	jekyll build --incremental --config _altconfig.yml

.PHONY: sol
sol:
	make -C ../sol buildsol
