import React, { Component } from 'react';

import './App.css';

class App extends Component {
  constructor() {
    super()
    this.state = {
        nb: 1,
        
    }
}

decrement(){
  this.setState({
    nb: this.state.nb-1
  })

}

increment() {
    this.setState({
        nb: this.state.nb + 1
    })
}
  render() {
    console.log("state")
    return (
      <div>
                <h1>{ this.state.nb }</h1>
                <button onClick={ ( ) => this.decrement() }>-</button>
                <button onClick={ ( ) => this.increment() }>
                    +
                </button>
            </div>
        )
    }
}


export default App;
