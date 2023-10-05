from flask import Flask,render_template

app=Flask(__name__)
@app.route('/')
def principal():
    #return 'Hola la primera pagina'
    return render_template('principal.html')

@app.route('/otra_pagina')
def otra_pagina():
    return 'Hola la segunda pagina'
    

@app.route('/tercera_pagina')
def tercera_pagina():
    return 'Hola la tercera pagina'
    
if __name__=='__main__':
    app.run(port=5000, debug=True)
