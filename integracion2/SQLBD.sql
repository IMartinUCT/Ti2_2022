USE [master]
GO
/****** Object:  Database [Integracion2]    Script Date: 21-09-2022 18:55:26 ******/
CREATE DATABASE [Integracion2]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'Integracion2', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.SQLEXPRESS\MSSQL\DATA\Integracion2.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'Integracion2_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.SQLEXPRESS\MSSQL\DATA\Integracion2_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
 WITH CATALOG_COLLATION = DATABASE_DEFAULT
GO
ALTER DATABASE [Integracion2] SET COMPATIBILITY_LEVEL = 150
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [Integracion2].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [Integracion2] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [Integracion2] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [Integracion2] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [Integracion2] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [Integracion2] SET ARITHABORT OFF 
GO
ALTER DATABASE [Integracion2] SET AUTO_CLOSE ON 
GO
ALTER DATABASE [Integracion2] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [Integracion2] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [Integracion2] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [Integracion2] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [Integracion2] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [Integracion2] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [Integracion2] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [Integracion2] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [Integracion2] SET  ENABLE_BROKER 
GO
ALTER DATABASE [Integracion2] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [Integracion2] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [Integracion2] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [Integracion2] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [Integracion2] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [Integracion2] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [Integracion2] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [Integracion2] SET RECOVERY SIMPLE 
GO
ALTER DATABASE [Integracion2] SET  MULTI_USER 
GO
ALTER DATABASE [Integracion2] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [Integracion2] SET DB_CHAINING OFF 
GO
ALTER DATABASE [Integracion2] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [Integracion2] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [Integracion2] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [Integracion2] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
ALTER DATABASE [Integracion2] SET QUERY_STORE = OFF
GO
USE [Integracion2]
GO
/****** Object:  Table [dbo].[failed_jobs]    Script Date: 21-09-2022 18:55:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[failed_jobs](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[uuid] [nvarchar](255) NOT NULL,
	[connection] [nvarchar](max) NOT NULL,
	[queue] [nvarchar](max) NOT NULL,
	[payload] [nvarchar](max) NOT NULL,
	[exception] [nvarchar](max) NOT NULL,
	[failed_at] [datetime] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[gastos]    Script Date: 21-09-2022 18:55:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[gastos](
	[Id_Gastos] [bigint] IDENTITY(1,1) NOT NULL,
	[Vehiculos] [int] NOT NULL,
	[Combustible] [int] NOT NULL,
	[Sueldo] [int] NOT NULL,
	[Capital] [int] NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[Id_Gastos] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[migrations]    Script Date: 21-09-2022 18:55:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[migrations](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[migration] [nvarchar](255) NOT NULL,
	[batch] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[password_resets]    Script Date: 21-09-2022 18:55:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[password_resets](
	[email] [nvarchar](255) NOT NULL,
	[token] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[personal_access_tokens]    Script Date: 21-09-2022 18:55:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[personal_access_tokens](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[tokenable_type] [nvarchar](255) NOT NULL,
	[tokenable_id] [bigint] NOT NULL,
	[name] [nvarchar](255) NOT NULL,
	[token] [nvarchar](64) NOT NULL,
	[abilities] [nvarchar](max) NULL,
	[last_used_at] [datetime] NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[users]    Script Date: 21-09-2022 18:55:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[users](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[name] [nvarchar](255) NOT NULL,
	[email] [nvarchar](255) NOT NULL,
	[email_verified_at] [datetime] NULL,
	[password] [nvarchar](255) NOT NULL,
	[remember_token] [nvarchar](100) NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
SET IDENTITY_INSERT [dbo].[gastos] ON 
GO
INSERT [dbo].[gastos] ([Id_Gastos], [Vehiculos], [Combustible], [Sueldo], [Capital], [created_at], [updated_at]) VALUES (1, 1500, 1497, 4566, 67008, CAST(N'1900-01-01T00:00:00.000' AS DateTime), CAST(N'1900-01-01T00:00:00.000' AS DateTime))
GO
SET IDENTITY_INSERT [dbo].[gastos] OFF
GO
SET IDENTITY_INSERT [dbo].[migrations] ON 
GO
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (1, N'2014_10_12_000000_create_users_table', 1)
GO
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (2, N'2014_10_12_100000_create_password_resets_table', 1)
GO
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (3, N'2019_08_19_000000_create_failed_jobs_table', 1)
GO
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (4, N'2019_12_14_000001_create_personal_access_tokens_table', 1)
GO
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (5, N'2022_09_21_181857_departamento', 1)
GO
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (6, N'2022_09_21_182821_create_gastos_table', 2)
GO
SET IDENTITY_INSERT [dbo].[migrations] OFF
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [failed_jobs_uuid_unique]    Script Date: 21-09-2022 18:55:26 ******/
CREATE UNIQUE NONCLUSTERED INDEX [failed_jobs_uuid_unique] ON [dbo].[failed_jobs]
(
	[uuid] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [password_resets_email_index]    Script Date: 21-09-2022 18:55:26 ******/
CREATE NONCLUSTERED INDEX [password_resets_email_index] ON [dbo].[password_resets]
(
	[email] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [personal_access_tokens_token_unique]    Script Date: 21-09-2022 18:55:26 ******/
CREATE UNIQUE NONCLUSTERED INDEX [personal_access_tokens_token_unique] ON [dbo].[personal_access_tokens]
(
	[token] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [personal_access_tokens_tokenable_type_tokenable_id_index]    Script Date: 21-09-2022 18:55:26 ******/
CREATE NONCLUSTERED INDEX [personal_access_tokens_tokenable_type_tokenable_id_index] ON [dbo].[personal_access_tokens]
(
	[tokenable_type] ASC,
	[tokenable_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [users_email_unique]    Script Date: 21-09-2022 18:55:26 ******/
CREATE UNIQUE NONCLUSTERED INDEX [users_email_unique] ON [dbo].[users]
(
	[email] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
ALTER TABLE [dbo].[failed_jobs] ADD  DEFAULT (getdate()) FOR [failed_at]
GO
USE [master]
GO
ALTER DATABASE [Integracion2] SET  READ_WRITE 
GO
