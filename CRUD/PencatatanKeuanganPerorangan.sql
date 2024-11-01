USE [pkp]
GO
/****** Object:  Table [dbo].[kategori]    Script Date: 24/10/2024 21:26:25 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[kategori](
	[id_kategori] [int] IDENTITY(1,1) NOT NULL,
	[nama_kategori] [varchar](50) NOT NULL,
	[jumlah_transaksi] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[id_kategori] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[transaksi]    Script Date: 24/10/2024 21:26:25 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[transaksi](
	[id_transaksi] [int] IDENTITY(1,1) NOT NULL,
	[tgl] [datetime] NOT NULL,
	[jenis_transaksi] [varchar](10) NOT NULL,
	[keterangan] [text] NULL,
	[nominal] [decimal](18, 2) NOT NULL,
	[id_kategori] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[id_transaksi] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
ALTER TABLE [dbo].[kategori] ADD  DEFAULT ((0)) FOR [jumlah_transaksi]
GO
ALTER TABLE [dbo].[transaksi]  WITH CHECK ADD  CONSTRAINT [FK_kategori] FOREIGN KEY([id_kategori])
REFERENCES [dbo].[kategori] ([id_kategori])
GO
ALTER TABLE [dbo].[transaksi] CHECK CONSTRAINT [FK_kategori]
GO
ALTER TABLE [dbo].[transaksi]  WITH CHECK ADD CHECK  (([jenis_transaksi]='Kredit' OR [jenis_transaksi]='Debit'))
GO
ALTER TABLE [dbo].[transaksi]
ALTER COLUMN [id_kategori] [int] NOT NULL;

