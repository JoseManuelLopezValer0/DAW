import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { MatToolbarModule } from '@angular/material/toolbar';
import { MatIconModule} from '@angular/material/icon';
import { MatSidenavModule } from '@angular/material/sidenav';
import { MatListModule } from '@angular/material/list';
import { MatButtonModule } from '@angular/material/button';
import { MatFormFieldModule } from '@angular/material/form-field';
import { MatTableModule } from '@angular/material/table';
import { MatExpansionModule } from '@angular/material/expansion';
import { MatDialogModule } from '@angular/material/dialog';
import { MatSnackBarModule } from '@angular/material/snack-bar';
import { MatInputModule } from '@angular/material/input' 

import { HttpClientModule } from '@angular/common/http';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { ListarContactosComponent } from './listar-contactos/listar-contactos.component';
import { DialogoConfirmacionComponent } from './dialogo-confirmacion/dialogo-confirmacion.component';
import { HttpErrorHandler } from './http-error-handler.service';
import { MessageService } from './message.service';
import { ContactosService } from './contactos.service';
import { AgregarContactoComponent } from './agregar-contacto/agregar-contacto.component';
import { FormsModule } from '@angular/forms';
import { EditarContactoComponent } from './editar-contacto/editar-contacto.component';
@NgModule({
  declarations: [
    AppComponent,
    ListarContactosComponent,
    DialogoConfirmacionComponent,
    AgregarContactoComponent,
    EditarContactoComponent
  ],
  entryComponents: [
    DialogoConfirmacionComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    BrowserAnimationsModule,
    MatToolbarModule,
    MatIconModule,
    MatSidenavModule,
    MatListModule,
    HttpClientModule,
    MatButtonModule,
    MatFormFieldModule,
    MatExpansionModule,
    MatTableModule,
    MatDialogModule,
    MatSnackBarModule,
    MatFormFieldModule,
    MatInputModule,
    FormsModule
  ],
  providers: [
   
    HttpErrorHandler,
    MessageService,
    ContactosService
  ],
  bootstrap: [ AppComponent ]

})
export class AppModule { }
