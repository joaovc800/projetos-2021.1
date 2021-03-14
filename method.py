import tkinter
import supp.tools as tool


f = True

baseGui = tkinter.Tk(screenName=None,  baseName=None,  className='MyBaseText',  useTk=1)


baseGui.after(tool.toMilliseconds(300), lambda : baseGui.destroy())
baseGui.mainloop()
