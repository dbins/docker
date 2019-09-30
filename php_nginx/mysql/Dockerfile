FROM mysql:5.6
COPY initial_data /docker-entrypoint-initdb.d
RUN chmod -R 775 /docker-entrypoint-initdb.d