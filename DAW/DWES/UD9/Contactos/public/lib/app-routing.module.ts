import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ListarContactosComponent } from './listar-contactos/listar-contactos.component';
import { AgregarContactoComponent } from './agregar-contacto/agregar-contacto.component';
import { EditarContactoComponent } from './editar-contacto/editar-contacto.component';
const routes: Routes = [
  { path: "contactos", component: ListarContactosComponent },
  { path: "contactos/agregar", component: AgregarContactoComponent },
  { path: "contactos/editar/:id", component: EditarContactoComponent },
  { path: "", redirectTo: "/contactos", pathMatch: "full" },// Cuando es la raíz
  { path: "**", redirectTo: "/contactos" }

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})

export class AppRoutingModule { }
