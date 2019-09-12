import React, { Component } from 'react';

export default class ListarUsuario extends Component {
  state = {
    usuarios: []
  }

  componentDidMount() {
    const req = {
      usuarios: [
        {
          nome: "Ruggeri"
        }
      ]
    }

    this.setState(req);
    console.log(this.state);
  }

    render() {
        return <div>
        <label>{this.state.nome}</label>
        </div>;
    }
}
