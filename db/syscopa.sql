create table usuarios
(
idUsuario int AUTO_INCREMENT primary key,
usuario varchar(50) not null,
contrasena varchar(50) not null
);

CREATE TABLE difuntos (
    id_difuntos INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    sexo VARCHAR(10),
    fecha DATE
);


CREATE TABLE propietario (
    id_propietario INT AUTO_INCREMENT PRIMARY KEY,
    nombre_completo VARCHAR(100),
    sexo VARCHAR(10),
    fecha_nacimiento DATE,
    edad INT,
    curp VARCHAR(18),
    celular VARCHAR(15),
    foto longblob NOT NULL,
    correo VARCHAR(50),
    comprobante_domicilio longblob NOT NULL 
);


CREATE TABLE tipoServicio (
    id_tipo_servicio INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    costo DECIMAL(10, 2) 
);



CREATE TABLE sepulcro_panteon_jardin (
    id_sepulcro_panteon_jardin INT AUTO_INCREMENT PRIMARY KEY,
    id_propietario INT,
    id_difunto INT,
    tipo_pago VARCHAR(50),
    calle VARCHAR(50),
    etapa VARCHAR(10),
    letra VARCHAR(5),
    lote VARCHAR(10),
    observacion VARCHAR(100),
    FOREIGN KEY (id_propietario) REFERENCES propietario(id_propietario),
    FOREIGN KEY (id_difunto) REFERENCES difuntos(id_difuntos)
);


CREATE TABLE sepulcro_panteon_municipal (
    id_sepulcro_panteon_municipal INT AUTO_INCREMENT PRIMARY KEY,
    id_propietario INT,
    id_difunto INT,
    tipo_pago VARCHAR(50),
    observacion VARCHAR(100),
    FOREIGN KEY (id_propietario) REFERENCES propietario(id_propietario),
    FOREIGN KEY (id_difunto) REFERENCES difuntos(id_difuntos)
);


CREATE TABLE servicios (
    id_servicios INT AUTO_INCREMENT PRIMARY KEY,
    id_propietario INT,
    id_sepulcro_panteon_municipal INT,
    id_tipo_servicio INT,
    boleta VARCHAR(20),
    mes INT,
    fecha DATE,
    panteon VARCHAR(50),
    datos_complementarios VARCHAR(100),
    FOREIGN KEY (id_propietario) REFERENCES propietario(id_propietario),
    FOREIGN KEY (id_sepulcro_panteon_municipal) REFERENCES sepulcro_panteon_municipal(id_sepulcro_panteon_municipal),
    FOREIGN KEY (id_tipo_servicio) REFERENCES tipoServicio(id_tipo_servicio)
);


