PGDMP     5                	    z         
   penertiban    10.22    10.22                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            ?            1259    23581 
   penertiban    TABLE     ?  CREATE TABLE public.penertiban (
    id integer NOT NULL,
    alamat character varying(255),
    kelurahan character varying(255),
    kecamatan character varying(255),
    keterangan character varying(255),
    foto_dokumen character varying(255),
    jenis character varying(255),
    tahapan character varying(255),
    latitude character varying(255),
    longitude character varying(255),
    no_upt_imb character varying(255),
    sk_peringatan1 character varying(255),
    tgl_sk_peringatan1 date,
    sk_peringatan2 character varying(255),
    tgl_sk_peringatan2 date,
    sk_peringatan3 character varying(255),
    tgl_sk_peringatan3 date,
    sk_penyegelan character varying(255),
    tgl_sk_penyegelan date,
    sk_bantib_penyegelan character varying(255),
    tgl_sk_bantib_penyegelan date,
    sk_pembongkaran character varying(255),
    tgl_sk_pembongkaran date,
    sk_bantib_pembongkaran character varying(255),
    tgl_sk_bantib_pembongkaran date,
    foto_lapangan character varying(255)
);
    DROP TABLE public.penertiban;
       public         postgres    false                      0    23581 
   penertiban 
   TABLE DATA               ?  COPY public.penertiban (id, alamat, kelurahan, kecamatan, keterangan, foto_dokumen, jenis, tahapan, latitude, longitude, no_upt_imb, sk_peringatan1, tgl_sk_peringatan1, sk_peringatan2, tgl_sk_peringatan2, sk_peringatan3, tgl_sk_peringatan3, sk_penyegelan, tgl_sk_penyegelan, sk_bantib_penyegelan, tgl_sk_bantib_penyegelan, sk_pembongkaran, tgl_sk_pembongkaran, sk_bantib_pembongkaran, tgl_sk_bantib_pembongkaran, foto_lapangan) FROM stdin;
    public       postgres    false    205   )
       ?           2606    23588    penertiban penertiban_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.penertiban
    ADD CONSTRAINT penertiban_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.penertiban DROP CONSTRAINT penertiban_pkey;
       public         postgres    false    205               ?  x???M??0???W???????>m????i/??R??????~? ?$?K?????̫?S?KGːlC*?!NCr?h?Yl???!zLz^#?4??j?4? ~ %?QC?@%????C??A)???3?>Cߨ?Ŏ?$z?^{??v??-???X?`;3?h???$s??R???*?ޤ!???b?????A?????3]??;??????!??ž?e?f??G	h??h???4??L????*pJ??z?*+w??9++-????ԈP??2J???؝?l?<^??'?l??f??"???????̏?≧?x???rf?\C*/I?M[EVi$&?9?kQ???q???Pb?"??HΡ??r6iz???{Eu???s?[l? ?$)$ j???U\v?w?Cu?}????i?>?`?Fk?1?M7??X.V'???Tq?	????5`????­??cq?~0tW??q<?^t0_O     