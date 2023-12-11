INSERT INTO difuntos (nombre, sexo, fecha)
VALUES ('Pedro Sánchez', 'Masculino', '2000-03-10');

INSERT INTO difuntos (nombre, sexo, fecha)
VALUES ('Laura Rodríguez', 'Femenino', '1995-11-25');

INSERT INTO propietario (nombre_completo, sexo, fecha_nacimiento, edad, curp, celular, foto, correo, comprobante_domicilio)
VALUES ('Juan Pérez', 'Masculino', '1990-05-15', 32, 'ABC123456XYZ78901', '555-1234', '/ruta/foto_juan.jpg', 'juan@example.com', '/ruta/comprobante_juan.pdf');

INSERT INTO propietario (nombre_completo, sexo, fecha_nacimiento, edad, curp, celular, foto, correo, comprobante_domicilio)
VALUES ('María Gómez', 'Femenino', '1985-08-20', 37, 'DEF987654WXY32101', '555-5678', '/ruta/foto_maria.jpg', 'maria@example.com', '/ruta/comprobante_maria.pdf');

INSERT INTO tipoServicio (nombre, costo)
VALUES ('Servicio Básico', 5000.00);

INSERT INTO tipoServicio (nombre, costo)
VALUES ('Servicio Premium', 10000.00);


INSERT INTO sepulcro_panteon_jardin (id_propietario, id_difunto, tipo_pago, calle, etapa, letra, lote, observacion)
VALUES (1, 1, 'Pago único', 'Calle Principal', 'Etapa 1', 'A', 'Lote 15', 'Observaciones sobre este sepulcro.');

INSERT INTO sepulcro_panteon_jardin (id_propietario, id_difunto, tipo_pago, calle, etapa, letra, lote, observacion)
VALUES (2, 2, 'Pagos mensuales', 'Avenida Secundaria', 'Etapa 2', 'B', 'Lote 30', 'Otra observación para este sepulcro.');

INSERT INTO sepulcro_panteon_municipal (id_propietario, id_difunto, tipo_pago, observacion)
VALUES (1, 1, 'Pago único', 'Observaciones sobre este sepulcro en el panteón municipal.');

INSERT INTO sepulcro_panteon_municipal (id_propietario, id_difunto, tipo_pago, observacion)
VALUES (2, 2, 'Pagos anuales', 'Otra observación para este sepulcro en el panteón municipal.');

INSERT INTO servicios (id_propietario, id_sepulcro_panteon_municipal, id_tipo_servicio, boleta, mes, fecha, panteon, datos_complementarios)
VALUES (1, 1, 1, '2023001', 3, '2023-03-15', 'Panteón Principal', 'Detalles adicionales para este servicio.');

INSERT INTO servicios (id_propietario, id_sepulcro_panteon_municipal, id_tipo_servicio, boleta, mes, fecha, panteon, datos_complementarios)
VALUES (2, 2, 2, '2023002', 5, '2023-05-20', 'Panteón Municipal', 'Otra información sobre este servicio.');