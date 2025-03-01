Imports System.Data.SqlClient

' DESKTOP-P18GG42
Public Class Conexion

    Public cn As New SqlConnection
    Protected Function conectado()
        Try
            cn = New SqlConnection("Data Source=DESKTOP-P18GG42;Initial Catalog=alab;Integrated Security=True")
            cn.Open()
            Return True
        Catch ex As Exception

            Msgbox(ex.Message)
            Return False

        End Try
    End Function


End Class
