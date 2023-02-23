<?
interface DAO
{
    public static function findAll();
    public static function findByIdPartido($id);
    public static function findByIdUser($id);
    public static function delete($id);
    public static function insert($objeto);
    public static function update($objeto);
}
