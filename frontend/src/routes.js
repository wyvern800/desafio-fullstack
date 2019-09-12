import React from 'react';
import { Switch, Route } from 'react-router-dom';

import ListarUsuario from './Usuario/listar/listar-usuario';

const Routes = () => (
    <div>
      <Switch>
        <Route exact path = "/listar" component = {ListarUsuario} />
      </Switch>
    </div>
);

export default Routes;
