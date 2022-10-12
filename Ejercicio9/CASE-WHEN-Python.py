
import psycopg2 as pc

# Configuramos la conexión a POSTGRES
conexion = pc.connect(user="postgres", 
                      password="root", 
                      host="127.0.0.1", 
                      port = "5432", 
                      database = "mibaseenrique")

cursor = conexion.cursor()

sql="""SELECT  AVG(case when departamento ='01' then notaFinal end) as CHQ, 
               AVG(case when departamento ='02' then notaFinal end) as LPZ, 
               AVG(case when departamento ='03' then notaFinal end) as CBA, 
               AVG(case when departamento ='04' then notaFinal end) as ORU, 
               AVG(case when departamento ='05' then notaFinal end) as PT,
               AVG(case when departamento ='06' then notaFinal end) as TJ, 
               AVG(case when departamento ='07' then notaFinal end) as SCZ,
               AVG(case when departamento ='08' then notaFinal end) as BE, 
               AVG(case when departamento ='09' then notaFinal end) as PND
               FROM PERSONA xp JOIN INSCRIPCION xi ON xp.ci = xi.ciEstudiante""";
cursor.execute(sql)

print ('chq \t', 'lpz \t', 'cba \t', 'oru \t', 'pt \t', 'tj \t','scz \t', 'be \t', 'pnd \t')
for chq, lpz, cba, oru, pt, tj, scz, be, pnd in cursor.fetchall() :
    print(f'{chq:.2f}\t {lpz:.2f}\t {cba:.2f}\t {oru:.2f}\t {pt:.2f}\t {tj:.2f}\t {scz:.2f}   {be:.2f}\t {pnd:.2f}\t')
   
    
# Cerramos la conexión
conexion.close()
