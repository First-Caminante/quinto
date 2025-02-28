
Imports System.Data.SqlClient
'Imports System.Data.SqlClient

Public Class connexion



    Private ReadOnly connectionString As String = "Data Source=DESKTOP-9K6N6VJ\SQLEXPRESS;Initial Catalog=proyecto;Integrated Security=True;Encrypt=False"

    Private cn As SqlConnection

    Public Function Conectar() As SqlConnection
            Try
                If cn Is Nothing Then
                    cn = New SqlConnection(connectionString)
                End If
                If cn.State = ConnectionState.Closed Then
                    cn.Open()
                End If
                Return cn
            Catch ex As Exception
                Throw New Exception("Error al conectar con la base de datos: " & ex.Message)
            End Try
        End Function

    Public Sub Desconectar()
        If cn IsNot Nothing AndAlso cn.State = ConnectionState.Open Then
            cn.Close()
        End If
    End Sub





    Public Function Validar(nombreUsuario As String, contrasenia As String) As Boolean
        Try
            Using conn As SqlConnection = Conectar()
                Dim query As String = "SELECT COUNT(*) FROM usuario WHERE nombre_usuario = @nombreUsuario AND contrasenia = @contrasenia"
                Using cmd As New SqlCommand(query, conn)
                    cmd.Parameters.AddWithValue("@nombreUsuario", nombreUsuario)
                    cmd.Parameters.AddWithValue("@contrasenia", contrasenia)

                    ' Verificar si existe un usuario con las credenciales proporcionadas
                    Dim result As Integer = Convert.ToInt32(cmd.ExecuteScalar())
                    Return result > 0
                End Using
            End Using
        Catch ex As Exception
            Throw New Exception("Error al validar las credenciales: " & ex.Message)
        End Try
    End Function





End Class
