Public Class Cusuario

    Dim cod_usuario, name_usuario, psw_usuario As String


    Public Sub New()



    End Sub

    Public Sub New(ByVal cod_usuario, ByVal name_usuario, ByVal psw_usuario)

        mcod_usuario = cod_usuario
        mnom_usuario = name_usuario
        mpsw_usuario = psw_usuario


    End Sub


    Public Property mcod_usuario
        Get
            Return cod_usuario
        End Get
        Set(value)
            cod_usuario = value
        End Set
    End Property

    Public Property mnom_usuario
        Get
            Return name_usuario
        End Get
        Set(value)
            name_usuario = value
        End Set
    End Property


    Public Property mpsw_usuario
        Get
            Return psw_usuario
        End Get
        Set(value)
            psw_usuario = value
        End Set
    End Property


End Class
