PGDMP     :    1            	    z         
   penertiban    10.22    10.22                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            �            1259    21669    jenis    TABLE     X   CREATE TABLE public.jenis (
    id integer NOT NULL,
    nama character varying(255)
);
    DROP TABLE public.jenis;
       public         postgres    false                      0    21669    jenis 
   TABLE DATA               )   COPY public.jenis (id, nama) FROM stdin;
    public       postgres    false    198   �       �           2606    21673    jenis jenis_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.jenis
    ADD CONSTRAINT jenis_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.jenis DROP CONSTRAINT jenis_pkey;
       public         postgres    false    198               �   x�u�;�@���_��)|ki�Āx)m6d��=���ߋ_`���7��D���a�j�h�*���}��TċCL���1S�mE�&�.�G�����\��"%�G�/�m�������#�^�V��dHaͮ���~���7���U�cA��1�tH`�����F�G p9T�     