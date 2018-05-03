#crear base de datos
create database if not exists MetroFoodDB;
use metrofooddb;



create table tipoUsuario(

	idTipoUsuario int not null auto_increment,
    tipoUsuario int,
    nombreTipoUsuario varchar(30),
    estado int,
        
    constraint pk_tipoUsuario primary key(idTipoUsuario)
    
) engine=innodb;

select * from tipousuario;

create table Usuario(
	
    idUsuario int not null auto_increment,
    usuario varchar(20),
    pass varchar(60),
    fechaCreacionUsuario date,
	fechaModificacionUsuario date,
    estadoUsuario int,
    idTipoUsuario int,
	
    constraint pk_usuario primary key(idUsuario),
    constraint fk_tipoUsuario_Usuario foreign key(idTipoUsuario) references tipoUsuario(idTipoUsuario)
    
) engine = innodb;
	
    #engine innobd es para poder utilizar un gestor que permita procesos almacenados

create table restaurante(

    idRestaurante int not null auto_increment,
	idUsuario int not null,
	nombreRestaurante varchar(100) not null,
    descripcionRestaurante varchar(300),
    estadoRestaurante int,
    fechaCreacion date,
    fechaModificacion date,
    longRestaurante varchar(80),
    latiRestaurante varchar(80),
    
    constraint pk_restaurante primary key(idRestaurante),
    constraint fk_restaurante_Usuario foreign key(idUsuario) references Usuario(idUsuario)
)ENGINE= InnoDB;

create table telefono_restaurante(
	idTelefonoRestaurante int auto_increment,
    idRestaurante int not null,
    telefono varchar(20),
    estado int,
    
    constraint pk_TelRest primary key(idTelefonoRestaurante),
    constraint fk_TelRest_Restaurante foreign key(idRestaurante) references restaurante(idRestaurante)
    
)engine=innodb;

create table combo(
	idCombo int auto_increment not null ,
    nombreCombo varchar(100) not null,
    descripcionCombo varchar(100),
    precioCombo double not null,
    estadoCombo int,
    fechaCreacionCombo date,
    fechaModificacionCombo date,
    
    constraint pk_combo primary key(idCombo) 
)ENGINE= InnoDB;

create table repartidor(	
	idRepartidor int not null auto_increment,
    idUsuario int not null,
    nombreRepartidor varchar(150),
	estadoRepartidor int,
    fechaCreacion date,
    fechaModificacion date,
    longRepartidor varchar(80),
    latiRepartidor varchar(80),
    
    constraint pk_repartidor primary key(idRepartidor),
    constraint fk_repartidor_Usuario foreign key (idUsuario) references Usuario(idUsuario)
    
)engine=Innodb;

create table telefono_repartidor(
	idTelefonoRepartidor int auto_increment,
    idRepartidor int not null,
    telefono varchar(20),
    
    constraint pk_TelRepart primary key(idTelefonoRepartidor),
    constraint fk_TelRest_Repartidor foreign key(idRepartidor) references repartidor(idRepartidor)
    
)engine=innodb;

create table cliente (
	
    idCliente int not null auto_increment,
    idUsuario int not null,
    nombre varchar(200),
    estado int,
    fechaCreacion date,
    fechaModificacion date,
    longRestaurante varchar(80),
    latiRestaurante varchar(80),
    
    constraint pk_cliente primary key(idCliente), 
	constraint fk_cliente_Usuario foreign key (idUsuario) references Usuario(idUsuario)
    
) engine=innodb;


create table telefono_cliente(
	idTelefonoCliente int auto_increment,
    idCliente int not null,
    telefono varchar(20),
    
    constraint pk_TelCliente primary key(idTelefonoCliente),
    constraint fk_TelCleinte_Cliente foreign key(idCliente) references cliente(idCliente)
    
)engine=innodb;

create table orden(
	
    idOrden int not null auto_increment,
    fechaOrden date,
    estadoOrden int,
    estadoEntregaOrden int,
    idRepartidor int not null,
    idCliente int not null,
    fechaModificacion date,
    
    constraint fk_Orden_Repart foreign key(idRepartidor) references repartidor(idRepartidor),
    constraint fk_Orden_Cliente foreign key(idCliente) references cliente(idCliente),
    
    constraint pk_Orden primary key(idOrden)
    
) engine=innodb;
	
create table detalle_Orden(
	
    idDetalleOrden int not null auto_increment,
    idOrden int not null,
    idCombo int not null,
    estadoDestalleOrden int,
    precioProducto double,
    fechaCreacion date,
    fechaModificacion date,
    
	constraint pk_idDetalleOrden primary key(idDetalleOrden),
    constraint fk_DetalleOrden_Orden foreign key(idOrden) references orden(idOrden),
    constraint fk_DetalleOrden_Combo foreign key(idCombo) references combo(idCombo)
    
    
) engine=innodb;







