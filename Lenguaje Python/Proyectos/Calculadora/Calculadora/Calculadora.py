from tkinter import *
from tkinter import ttk

raiz = Tk();
raiz.title('Calculadora');
raiz.geometry("700x500");
raiz.iconbitmap("Multimedia/ico.ico");
raiz.resizable(0,0);
entry = ttk.Entry(raiz);
entry.place(x=20, y=10, height=100, width=650, font=('Helvetica', '20'));

raiz.mainloop();