import { Component,  OnInit } from '@angular/core';
import { ContactosService } from '../contactos.service';
import { Contacto } from '../../model/contacto';
import { MatDialog } from '@angular/material/dialog';
import { MatSnackBar } from '@angular/material/snack-bar';
import { DialogoConfirmacionComponent } from '../dialogo-confirmacion/dialogo-confirmacion.component';
@Component({
  selector: 'app-listar-contactos',
  templateUrl: './listar-contactos.component.html',
  styleUrls: ['./listar-contactos.component.css'],
  providers: [ContactosService]
})

export class ListarContactosComponent implements OnInit{
  public contactos: any;

  constructor(private contactosService: ContactosService, private dialogo: MatDialog, private snackBar: MatSnackBar) { }
  
  eliminarContacto(contacto: Contacto) {
    this.dialogo
      .open(DialogoConfirmacionComponent, {
        data: `¿Realmente quieres eliminar a ${contacto.nombre}?`
      })
      .afterClosed()
      .subscribe((confirmado: Boolean) => {
        if (!confirmado) return;
        this.contactosService.deleteContacto(contacto.id).subscribe(data=>{
          this.contactos = this.getContactos()});   
        
        this.contactosService.deleteContacto(contacto.id)
          .subscribe(() => {
            this.getContactos();
            this.snackBar.open('Contacto eliminado', undefined, {
              duration: 1500,
            });
          });
      })
  } 
  ngOnInit() {
    this.getContactos();
   
  }

  getContactos(): void {

    this.contactosService.getContactos().subscribe(
      (result:any)=>{
       
        this.contactos = result;
       
      });
  }


}